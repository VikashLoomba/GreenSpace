<ul class="skill-bar">
    <li>
        <p>Openness to novel experience: </p> <?=$search_results['effects'][0]['score']?>
        <div class="wrapper"><span id="open" data-width="<?=$search_results['effects'][0]['score']?>"></span></div>
    </li>
    <li>
        <p>Happy:</p>
        <div class="wrapper"><span id="happy" data-width="<?=$search_results['effects'][1]['score']?>"></span></div>
    </li>
    <li>
        <p>Relaxed:</p>
        <div class="wrapper"><span id="relaxed" data-width="<?=$search_results['effects'][2]['score']?>"></span></div>
    </li>
    <li>
        <p>Uplifted:</p>
        <div class="wrapper"><span id="uplifted" data-width="<?=$search_results['effects'][3]['score']?>"></span></div>
    </li>
    <li>
        <p>Creativity:</p>
        <div class="wrapper"><span id="creativity" data-width="<?=$search_results['effects'][4]['score']?>"></span></div>
    </li>
</ul>