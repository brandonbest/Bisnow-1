<!DOCTYPE html>
<html>
    <head>
        <!-- TODO: THESE INCLUDES OUGHT TO BE MOVED TO A CENTRALIZED HEADER LOCATION -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
              integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
              crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </head>
    <body>
            <?php
                    if(isset($news_items)) {
                        foreach($news_items as $news_item) {
                            echo "NEWS ITEM #: ".$news_item->id.'<br/>';
                            echo "TITLE: ".$news_item->title.'<br/>';
                            echo "BODY: ".$news_item->body.'<br/>';
                            echo "DATE: ".$news_item->date.'<br/>';
                            echo "<br/>";
                        }
                } else {
                    echo 'NEWS ITEM NOT FOUND';
                }
            ?>
            <meta name="csrf-token" content="{{ csrf_token() }}" />
    </body>

    <!-- TODO: THIS JAVASCRIPT OUGHT TO BE MOVED TO A MORE CENTRAL LOCATION -->
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            //FIND ID FROM THE URL, IF ANY
            var parts = window.location.href.split("\/");
            var item_id = '';
            if(!isNaN(parts[parts.length-1])) {
                item_id = parts[parts.length-1];
            }

            //ADD ITEM TO TRACKING TABLE
            $.post(
                    '/tracking',
                    {
                        'url' : window.location.href,
                        'item_type': 'news',
                        'item_id': item_id
                    },
                    function (d, s) {} //TODO: Do something
            );
        });
    </script>
</html>