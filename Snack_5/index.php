<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
aggiungete poi i seguenti snack da realizzare -->

<?php

$paragrafo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam harum officiis laudantium delectus vel nulla nihil rem eaque dolore earum dicta voluptas dignissimos, ad est. Voluptatibus a tempora nemo quibusdam dolores maiores ut explicabo doloribus reprehenderit, itaque neque ea quod earum beatae consectetur quisquam quis rerum fuga officia ab doloremque necessitatibus obcaecati voluptatem cumque! Sint dolorum debitis, suscipit id consectetur cupiditate cum consequuntur odit nihil cumque dolore, aliquid deserunt soluta quas repellendus ad enim fuga recusandae. A in perspiciatis ullam earum quasi pariatur libero fugit est dignissimos quisquam porro reprehenderit sit non voluptatem odit aperiam eveniet sunt, qui eligendi officiis inventore tenetur recusandae vero quia. Officiis expedita commodi et iusto nostrum nulla, alias esse aliquam odio veniam illo unde dolores aspernatur amet cumque. Perspiciatis accusamus iusto facilis ullam, aliquam impedit fuga facere odit unde, hic ad consequuntur ducimus consequatur totam adipisci aspernatur architecto voluptas dignissimos distinctio neque optio rerum! Nobis impedit velit a porro esse, temporibus deleniti veritatis adipisci necessitatibus quis accusamus, quam iste, recusandae delectus soluta doloribus quaerat facilis officiis maiores corporis sunt minima neque consequuntur! Delectus rem eos animi blanditiis, laborum ullam atque, modi error aut, amet incidunt quae earum eum doloremque voluptatum in mollitia reiciendis! Impedit numquam alias fugit debitis temporibus dolor expedita quo sequi eaque. Quis, consequatur ex? Hic porro fugit cupiditate exercitationem inventore error molestias placeat quas quis, rerum beatae dolorum cumque minus repellat quo corporis nam veniam aut nemo praesentium veritatis unde! Accusamus excepturi explicabo incidunt tempora perspiciatis nihil praesentium molestias illo fuga suscipit veritatis sit hic perferendis recusandae animi optio, distinctio deleniti minima tempore aliquid commodi? Distinctio aut odio numquam perspiciatis reprehenderit accusantium atque inventore reiciendis itaque laboriosam quisquam facere ipsum aperiam nobis, hic, natus doloribus dolores debitis omnis, necessitatibus quae. Molestias aut alias excepturi nesciunt rem corrupti fugit sapiente doloribus atque sunt.";

$arrayDiParagrafi = explode(".", $paragrafo);

var_dump($arrayDiParagrafi);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p><?php echo $paragrafo ?></p>
  <ul>
      <?php foreach($arrayDiParagrafi as $item){
        echo "<li>$item</li>"; 
      }
      ?>
  </ul>
</body>
</html>