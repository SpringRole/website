<div id="skill-desc-panel" class="panel-content">
    <h3><?= $param['skill']->getLocalName(); ?></h3>

    <hr>
    <div id="node-description"></div>
    <script src="js/jquery.wikiblurb.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            getDesc();
        });

        function getDesc() {
            $('#node-description').wikiblurb({
                wikiURL: "http://en.wikipedia.org/",
                apiPath: "w",
                section: 0,
                page: "<?= $param['skill']->getLocalName(); ?>",
                removeLinks: true,
                type: "blurb"
            });

            setTimeout(function() {
                var wikisubs = document.getElementById("node-description").innerText;
                var sliced = wikisubs.slice(-11);
                var check = "refer to:";
                sliced = sliced.trim();

                console.log(sliced)

                if(sliced === check) {
                    document.getElementById("node-description").innerHTML = "There is no description available for this node.";
                }
            }, 1000);
        }
    </script>

    <div class="panel-bottom">
        Description provided by Wikipedia.
    </div>
</div>