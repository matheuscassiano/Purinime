<div id="social">
    <div id="s-in">
      <br>
      <div id="divBusca" id="nnn" style="background-color:#ECB673; margin: 0; margin:0 5% 15px 2%; width: 90%">
        <img src="https://i.imgur.com/zqT0FIn.png"/>
        <form action="index.php" method="GET">
          <input type="text" id="txtBusca" placeholder="Pesquisar" name="busca">
          <button type="submit" class="btn"><i class="fa fa-search"></i></button>
        </form>
      </div>
      
      <!--p class='Lead'>Faça parte do nosso grupo no Discord
        <img src="https://www.intoxianime.com/wp-content/uploads/2017/08/Discord_logo-300x96.png">
      </p-->

      <h6>Postagens Recentes: </h6>
      <?php
      $sql = mysqli_query($link,"SELECT * FROM publicacao ORDER BY publicacao_id DESC LIMIT 2");
      $x = 1;
      foreach ($sql as $pubId) {
        $id_p = $pubId['publicacao_id'];
        $post_A = mysqli_query($link,"SELECT * FROM publicacao WHERE publicacao_id='$id_p'");
        $dado_A = mysqli_fetch_array($post_A);

        $imagem = $dado_A['imagem'];
        $titulo = $dado_A['titulo'];
        $descricao = $dado_A['conteudo'];

        $titulo = substr($titulo, 0, 27);
        $descricao = substr($descricao, 0, 45)."...";

        echo "<div id='post_p'>";
          echo "<a href='artigo.php?id=$id_p'>";
            echo "<img src='$imagem' id='img_p'>";
          echo "</a>";

          echo "<div id='card_p' style='width: 300px;'>";
            echo "<div id='c-txt'>";
              echo "<h4>".$x."ª $titulo</h4>";
              echo "<p class='Lead'>$descricao</p>";  
            echo "</div>";
          echo "</div>";
        echo "</div>";
        $x ++;
      }?>

      <h6>Postagens Favoritas: </h6>
      <?php
      $vws = mysqli_query($link,"SELECT * FROM publicacao ORDER BY views DESC LIMIT 2");
      $x = 1;
      foreach ($vws as $pubVw) {
        $id_vw = $pubVw['publicacao_id'];
        $post_vw = mysqli_query($link,"SELECT * FROM publicacao WHERE publicacao_id='$id_vw'");
        $dado_vw = mysqli_fetch_array($post_vw);

        $imagem = $dado_vw['imagem'];
        $titulo = $dado_vw['titulo'];
        $descricao = $dado_vw['conteudo'];
        $views = $dado_vw['views'];

        $titulo = substr($titulo, 0, 27);
        $descricao = substr($descricao, 0, 45)."...";

        echo "<div id='post_p'>";
          echo "<a href='artigo.php?id=$id_vw'>";
            echo "<img src='$imagem' id='img_p'>";
          echo "</a>";

          echo "<div id='card_p' style='width: 300px;'>";
            echo "<div id='c-txt'>";
              echo "<h4>".$x."ª $titulo</h4>";
              echo "<p class='Lead'>$descricao <br> <b> Views: </b> $views</p>";  
            echo "</div>";
          echo "</div>";
        echo "</div>";
        $x ++;
      }?>

      <div id="ads">
      <hr>
      
        <img style='width: 300px' src='https://i.imgur.com/ej3xgnq.png'>
      
        <br>
        <br>

        <a style="display:block; width:300px; height:250px; vertical-align:initial !important;" href="//redir.bebi.com/1.0/go?tq=sfnT4pT_pJdioMPmCkhnqCpFPFGTcKuti76LReIpQ05hPs4QQDZlqQ0SHK3AUffklzIQlEuROuVLQs_CbCD5vOel9KhFbRceWNCfJx22LIg7VzL9_XTMmdN2kvIF5EcGeepR8fv3OatOCF3tvB1ux2PXWdPk2e5CppZLgEiCizkLcv_p15aL78xedyVkuJA5klt53cIY455FB9SsrfkJSKZhkyd7mosQRy6UiJ0h4dcn5AHTeGB7iNLyfwX0WGsRDWEmY6NhnryL-2DWqzY4n4SdPAhn7vVRy7Ajbz9HH79TqUVgspb0aICJpDnPXBUy2gjeZMy3UvL-B3hSiEfGwQg73XXV0_24b_9KoqQNMWtvQk5BXn4XwsdGchm66jGEUM83K9ObbAi2dNGJAYKrHojPzoeCRDz6vNs5lPAke7nl6g1FUs4NA3274ARqF-nhgZZxNwzo4Q6jKhNx1SZjdo5qCn9F-COi-2jcVPZiAwtLWu1J3UjkY9S-Q26RwKLvVhYcx9bvIBXSWUq56HLek6srJkmR7WDvz5rxFzf350sQZ1nnsVOYhXjPA8xAL-RxZZIYYuEEDjaIa4z8LWDUVewma2O4yN1NLv86O3ptQ5qZhdpzyQfa4lhFD-pIlrejyJjXFTUCsqs-r2D7eEo3QPw822VdxUX4jEvIOZO1PnqKAEIv3F5Vlu0ojGFOiOvmywmgxeSJJike44hSGsvAt7aO1HY173MOy9NUj0H5FTy2DeDn384f-0U1h9NWqt-nivh41VF6_ff0Fx8uOSOe680o2QjDDbpTJJ1Cjanzn_sAAj58xyw_GXA8K-enkuIVI_tA6o_75oH7dqAHB7QJisWqXYCZzthJRaPBsaO6jSw90B8FQZ8fszkHIxtRspZr&amp;bi=8a2cc01a-b38d-40f2-afb2-03f85d7aaca1&amp;bbuid=43bc74d5-3057-4a79-8220-02030ab45510" rel="noindex nofollow" target="_blank"><img border="0" style="width:300px;" src="//c.bebi.com/d8fe9ba9-646f-42b1-b7e3-2ef4093d48fa.jpg" width="300"></a>

        <br>

        <a style="display:block; width:300px; height:250px; vertical-align:initial !important;" href="//redir.bebi.com/1.0/go?tq=OzJ9VNl1pudUN_JzHyKpVEmNBEdSuUC4yqAlS3NtcEeozDuygDfVqy7BK6Awsvipos_fstKgoEzyK9AC2wyhp6_LhQGS8s3z9kOXOeAP6ZJgoP3luKVVNc6-dpARzTaLpSYrhzK0S77NWDa4GKJbfSj7cqI3WAc3xzQ6Qj-8-NqgLdi6fjilWEkGb06P-P8DOy-mdsAR4MC2EFDKWCxAjXN1bglXFE5_9cQ8Sk6mc3tBNnSSRGP4RjATxBhaS1rSkZK5Y3vbmjOdVdyX34PcU9XJ-22BE--A0rqldM4QFFbMoEwz4WkdViDC_0xq20DI2m9yXY1wu1pZZfTmWcnqG6gGfgKPkd5AODjQyRxEm-JXtmiYAeFoHk9uScFEBeQHfdqFIoGdDAv_Y2QpS1_P1oJTPz1LVYvPdKknOY0HKdPhq02smGTyTkQ1YhuUpBOdPMr8FGvyfHUbX13nHPTK1CcILhBU0jw1jEBwG7N1ZfPwA4y7zBZML1LjjpeLGptg-yTqSitZz3oNF7o-8CKGHEXINdXtCcxHjJYZHaL5HVelTXpSTQQbo_aPUsBsPiQ0-Uy7GFTNa-DGvWmd5eAq1GaZ5cubg9XMOkd2EwSl6BX-UYoLL9LzJSN-kZzVUZC6bpOgl5sXpX1gMaNwrY-sfKLT9j0MraxMGkyzrU3AypG5UhHuHGEAqLzIipF2KAe8GLdqgA_giG3n3yu7Gny3M1jEr9XhL1qLYfKLMcjcHfjqUEgLyVpxxiYKOSMYqvaurp_FOunHu-P3xwrabvWfDruj-_bxlV1NJS3qDFbDpkWPqi06n19NDy1ybn5C3zmqjGQACFYM6pWGfmHurDlqeilPTwRBW0f4TYruecYBqMoDmsP4-yX7sFh3s99_WP5Nnt4q4zG-4wqY2Iv1FjrpKZ2nGMAk7Lj1RtfeSkae9PVbmoGfuuIXP_Vv9gIfj1eS&amp;bi=8a2cc01a-b38d-40f2-afb2-03f85d7aaca1&amp;bbuid=def59694-4b23-43cd-93f7-4a6a39087601" rel="noindex nofollow" target="_blank"><img border="0" style="width:300px;" src="//c.bebi.com/9c016b00-da5a-4208-a8ab-70053ff71c4f.jpg" width="300"></a>

        <br>

        <a style="display:block; width:300px; height:250px; vertical-align:initial !important;" href="//redir.bebi.com/1.0/go?tq=sM5eSIDz50HG8VYl5CoFI4Pry8ZLCU77Q4smyF2nN-3ORmJatPzePzRcDylxoCIUemZPWbX_bTW8VlJWG_YfiCWhP_ZApRJPZuzfC__80nKsk5epR1KoLT_QFcZxSmFjots2KxAfdBnL2J2vKMOwP72pF9Ls0YJ4vAlt22zu6nQ5ut6tnLfpmB-o0KBoU8W18e6XhS9zd6KggsTQIsNxs4lJlBY6nRUh4RV5R6PFj2SgAETWRtX-k44bWcG1ugnHowfWehtTUoyxMt7z4JTxtSP02ofrG6RaHeoKYuSbP5GvA5wKO9v6Xnve0ehFGqWpeNn4KeFGRMv18KL1uobEzO9NOgIRwb5t_Dzp5ZS6M9mW98nlz68qCVpHYDcQJo6ga9tLoJwy-4shXrCYN2Psi1h3VNo9P0c-rLqMX2O3nxnPF0lXGqxACGIYCaZAYs0PzDnf2BItKi7ZF_6nYd7rSPgc4nPv8tAXq3LrqUQyavZMZAg0alI8jz9B6OYtQvaxTqtjVH4e2ZOYlnyl79IEpuJSRA2TR5VjlOJfKOeeAAEI94bYrM0bGJrXOSJ-JLmAOtC_BH9BFgOtWJDiUoBTum6xPTvXW4fMlRbkrXdxRzEMetv7c2TaPqj5VCsoQsfTfOEw6r9C9DzUlyewaUNqZLCFAAy9R4qC646BwUOlW3zUgsGZ-fV_HtQbEZkLqJkXx4hgnSBFCbWUVqNprSj1F_GIbsQ63wbS00ejX2zhkOvOg1540ny7vuzVDHIH4rIhuNMNwEPtu4vRkJ35ShGf63POqWZ8rDkxU_cB1PzHfqpGq_f3tl0zDdy6UzOVUv58rTej29CYrj3hgFNhd5a0jyUTbWUZwRfkA4hlwAur9k7vWWUesFocb2xtbQe1eT6EZIAZBSFZRibHm_zwWt-WPqcKtoYUCpeVuoVRNTRJG_PWxsEwzucKLkXcrdrA_1CMYxzN3Y4qfx2EABi6BVT8gg&amp;bi=8a2cc01a-b38d-40f2-afb2-03f85d7aaca1&amp;bbuid=b28b48bd-13c8-43f3-a671-98ec95c960d9" rel="noindex nofollow" target="_blank"><img border="0" style="width:300px;" src="//c.bebi.com/8c98b816-7f4c-4b30-96cf-5f552f202219.jpg" width="300"></a>
        <br><br>
      </div>
     <br>
   </div>
 </div>


</div>