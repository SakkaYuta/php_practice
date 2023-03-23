 <?php
  //変数
  //ブログのタイトル
  const ID = 1;
  $title = "PHPテスト";
  $content = 'PHPテストです';
  $post_at = '2023/03/23';
  $tag = ['PHP','プログラミング'];
  $status = true;

  const ID2 = 2;
  $title2 = "PHPテスト2";
  $content2 = 'PHPテストです2';
  $post_at2 = '2023/03/23';
  $tag2 = ['PHP2','プログラミング2'];
  $status2 = true;

  $blog1 = array(
    'id' => ID,
    'title' =>$content,
    'content' => $post_ad,
    'tag' => $tag,
    'status' => $status
  );

  
//  echo $blog1['title']
 
 $blog2 = [
    'id2' => ID2,
    'title2' => $content2,
    'content2' => $post_ad2,
    'tag2' => $tag2,
    'status2' => $status2
 ] ;

//  echo '<pre>';
//  var_dump($blog2);
//  echo'</pre>'

 $blogs = [$blog1, $blog2];

//  echo '<pre>';
//  var_dump($blogs);
//  echo'</pre>';

// foreach($blog1 as $blog){
//  echo '<pre>';
//  echo $blog;
//  echo'</pre>';
// }

// foreach($blog2 as $key => $value) {
//     echo '<pre>';
//     echo $key . '=' . $value;
//     echo'</pre>';
// }

foreach($blogs as $blog){
    foreach($blog as $value){
    echo '<pre>';
    echo $value;
    echo'</pre>';
    }
}
 ?>