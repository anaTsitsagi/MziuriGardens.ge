<?php defined('DIR') OR exit; ?>
<!-- main-cont -->
<?php
    $all = (get('all') == 'show');
	$children=db_fetch_all("select * from pages where masterid=".$id." and language='".l()."'");
	$menus = array();
	if(isset($_GET["a_0"]) or count($_GET)==0) :
		foreach($children as $c) :
			$menus[] = $c["menutype"];
		endforeach;
	else :
		foreach($_GET as $key=>$value) :
			$menus[] = $value;
		endforeach;
	endif;
    $menu_id = implode(",", $menus);
    if (!$all AND (empty($menu_id) OR $menu_id == 'NULL'))
        $menu_id="0";
    $all_news = $all ? " AND menuid IN (SELECT id FROM `".c("table.menus")."` WHERE `deleted` = '0' AND type = 'articles') " : " AND menuid in ({$menu_id}) ";
    //Pager: start
    $page = abs(get('page', 1));
    $per_page = c('articles.per_page');
    $limit = " LIMIT " . (($page - 1) * $per_page) . ",{$per_page}";
    $count = "SELECT COUNT(*) as cnt FROM `".c("table.galleries")."` WHERE language = '" . l() . "' {$all_news}AND `deleted` = '0' AND visibility = 1 ORDER BY postdate DESC{$limit};";
//    $count = "SELECT COUNT(*) AS cnt FROM `".c("table.pages")."` WHERE language = '" . l() . "' {$all_news}AND visibility = 1 AND deleted = 0 ORDER BY postdate DESC;";
    $count = db_fetch($count);
    $count = empty($count) ? 0 : $count['cnt'];
    $page_max = ceil($count / $per_page);
    $page_cur = $page;
    $page_max = $page_max;
    $item_count = $count;
    $all_par = $all ? '&all=show' : null;
    //Pager: end
	// $sql = "SELECT * FROM `".c("table.galleries")."` WHERE menuid in (select menutype from pages where masterid=3 and language='".l()."') AND `deleted` = '0' AND `language` = '" . l() . "' AND (title like '%".$q."%' OR author like '%".$q."%' OR meta_keys like '%".$q."%') ORDER BY `position` DESC;";
    $sql = "SELECT * FROM `".c("table.galleries")."` WHERE language = '" . l() . "' {$all_news}AND `deleted` = '0' AND visibility = 1 ORDER BY postdate DESC{$limit};";

//    $sql = "SELECT * FROM `".c("table.pages")."` WHERE language = '" . l() . "' {$all_news}AND `deleted` = '0' AND visibility = 1 ORDER BY postdate DESC{$limit};";
    $res = db_fetch_all($sql);
    $audios = $res;
	if($level==1) $t=$id; else $t=$masterid;
?>
<div class="main-cont">
  <div class="body-wrapper">
    <div class="page-head">
    	 <div class="wrapper-padding">
		      <div class="page-title"><?php echo $title;?></div>
		      <div class="clear"></div>
	     </div>
    </div>
    <div class="wrapper-padding">
    <div class="two-colls">
      <div class="two-colls-left">

        <!-- // side // -->
        <div class="side-block fly-in">
          <div class="side-stars">
            <div class="side-padding">
	          <form id="cats" method="get" action="<?php echo href($t);?>">
              <div class="side-lbl">?????????????????????????????????</div>
<?php 
	$article_cats = db_fetch_all("select * from pages where language='".l()."' and masterid=".$t);
	foreach($article_cats as $a) :	
?>
	          <div class="checkbox">
	            <label>
	              <input type="checkbox" value="<?php echo $a["menutype"];?>" name="a_<?php echo $a["menutype"];?>" id="a_<?php echo $a["menutype"];?>" onclick="goPage('<?php echo $a["menutype"];?>');" <?php echo isset($_GET["a_".$a["menutype"]]) ? 'checked':'';?> />
	              <?php echo $a["title"];?>
	            </label>
	          </div> 
<?php 
	endforeach; 
?>
<script>
	function goPage(id) {
		if(id!=0)
			$("#a_0").prop('checked', false);
		$("#cats").submit();
//		location.href=link;
	}
</script>
	          <div class="checkbox all">
	            <label>
	              <input type="checkbox" value="0" name="a_0" id="a_0" onclick="goPage(0);" <?php echo isset($_GET["a_0"]) ? 'checked':'';?> />
	              ???????????????
	            </label>
	          </div>
			  </form>
            </div>
          </div>  
        </div>
        <!-- \\ side \\ -->
        
      </div>
      <div class="two-colls-right">
        <div class="two-colls-right-b">
          <div class="padding">
            <div class="catalog-row alternative">
				<div class="fly-in mp-popular-row">
<?php foreach($audios as $a) : ?>					
					<div class="flat-adv large">
						<div class="blog-masonry-audio">
							<audio src="<?php echo $a["link"];?>" controls="controls"></audio>
						</div>
						<div class="offer-slider-txt audio-txt">
							<div class="offer-slider-link"><a style="display:block; float:left;" nohref=""><?php echo $a["title"];?></a><a style="display:block; float:right;" href="<?php echo $a["link"];?>" target="_blank">?????????????????????????????????</a></div>
							<div class="clear"></div>
							<div class="offer-slider-cat">
<?php
	$cat = db_fetch("select * from pages where language='".l()."' and menutype=".$a["menuid"]);
	echo $cat["title"];
?>
							</div>
							<div class="offer-slider-auth">
								<?php echo $a["author"];?>
							</div>						
							<div class="clear"></div>
						</div>
					</div>
<?php endforeach; ?>
            	</div>
            </div>
            
            <div class="clear"></div>
<!--            
            <div class="pagination">
              <a class="active" href="#">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <div class="clear"></div>
            </div>            
-->
          </div>
        </div>
        <br class="clear" />
      </div>
    </div>
    <div class="clear"></div>
    </div>	
  </div>
    
</div>
<!-- /main-cont -->
<?php require("_website/templates/widgets/popular.php");?>
