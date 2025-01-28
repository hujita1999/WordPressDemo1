<?php get_header(); ?>

<main>
  <div id="mainvisual">
    <img src="<?php echo get_template_directory_uri(); ?>/img/common/mainvisual.jpg" alt="mainvisual">
  </div>

  <section id="about" class="wrapper">
    <h2 class="section-title">About</h2>
    <div class="content">
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/about.jpg" alt="Aboutimage">
      <div class="text">
        <h3 class="content-title">KAKERU MIYAUCHI</h3>
        <p>
          テキストテキストテキストテキストテキストテキストテキスト<br>
          テキストテキストテキストテキストテキストテキストテキスト<br>
          テキストテキストテキストテキストテキストテキストテキスト
        </p>
      </div>
    </div>
  </section>



  <section id="bicycle" class="wrapper">
    <h2 class="section-title">Bicycle</h2>
      <ul>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/bicycle1.jpg" alt="Bicycle1">
          <h3 class="content-title">タイトルタイトル</h3>
          <p>テキストテキストテキスト</p>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/bicycle2.jpg" alt="Bicycle2">
          <h3 class="content-title">タイトルタイトル</h3>
          <p>テキストテキストテキスト</p>
        </li>
        <li>
          <img src="<?php echo get_template_directory_uri(); ?>/img/common/bicycle3.jpg" alt="Bicycle3">
          <h3 class="content-title">タイトルタイトル</h3>
          <p>テキストテキストテキスト</p>
        </li>
      </ul>
  </section>
</main>

<?php get_footer(); ?>

