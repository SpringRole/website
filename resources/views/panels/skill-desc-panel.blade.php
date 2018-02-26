<div id="skill-desc-panel" class="panel-content">
    <h3><?= $param['skill']->getLocalName(); ?></h3>

    <hr>
    <h4>Description:</h4>
    <br><br>
    <div id="node-description"></div>

    <script src="js/jquery.wikiblurb.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            $('#node-description').wikiblurb({
                wikiURL: "http://en.wikipedia.org/",
                apiPath: "w",
                section: 0,
                page: "<?= $param['skill']->getLocalName(); ?>",
                removeLinks: true,
                type: "blurb"
            });

        });

    </script>

    <div class="panel-bottom">
        Description provided by Wikipedia.
    </div>

    <hr>
    <h4>Related Skills:</h4>
    <br><br>
    <ol>
        <li>1. <?= $param['relatedSkills'][0]->getLocalName(); ?><br></li>
        <li>2. <?= $param['relatedSkills'][1]->getLocalName(); ?><br></li>
        <li>3. <?= $param['relatedSkills'][2]->getLocalName(); ?><br></li>
        <li>4. <?= $param['relatedSkills'][3]->getLocalName(); ?><br></li>
        <li>5. <?= $param['relatedSkills'][4]->getLocalName(); ?><br></li>
    </ol>

</div>