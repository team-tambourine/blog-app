<!DOCTYPE html>
<html lang='ja'>
<head>
   <meta charset='UTF-8'>
   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
   <link rel='stylesheet' href='/css/articleList.css'>
   <title>List</title>
</head>
<body>
   <div class='container'>
      <h2 class="pageTitle">記事一覧</h2>
      <div class="border"></div>

<!-- 以下、foreachで回す記事リストアイテムの雛形 -->
      <div class='listItemContainer'>
         <main class="listItemFlexBox">
            <img class="listItemImage" src=""/>
            <div class='informationContainer'>
               <h4 class='listItemTitle'>title</h4>
               <p class='userName'>userName</p>
            </div>
         </main>
         <div class="listItemBorder"></div>
      </div>



      <div class='pageSwitchContainer'>
         <button class="pageSwitchButton buttonLeft" ><</button>
         <p class="pageNumber" >1/121</p>
         <button class="pageSwitchButton buttonRight" >></button>
      </div>


   </div>
</body>
</html>
