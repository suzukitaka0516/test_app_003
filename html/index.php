<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>チャットルーム</title>
  </head>
  <body>
    <section>
      <h2>チャットルーム</h2>
      <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <div class="form-group">
            <input type="text" id="message" class="form-control" placeholder="メッセージを入力" name="" value="">
          </div>
          <div class="messages"></div>
        </div>
      </div>
    </section>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="./js/Main.js"></script>
    <script type="text/javascript" src="./js/ChatController.js"></script>
    <script type="text/javascript">
      Main.init();
    </script>
  </body>
</html>
