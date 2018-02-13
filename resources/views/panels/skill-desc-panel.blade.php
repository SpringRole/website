<div id="skill-desc-panel" class="panel-content">
    <h3><?= $param['skill']->getLocalName(); ?></h3>

    <hr>

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
</div>