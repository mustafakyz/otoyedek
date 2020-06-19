 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>OTO2000</title>
    <link rel="icon" type="image/x-icon" href="assets\img\favicon.ico">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="\backend\bootstrap\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="\backend\assets\css\plugins.css" rel="stylesheet" type="text/css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="backend\assets\css\forms\theme-checkbox-radio.css">
    <link href="\backend\plugins\jquery-ui\jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="\backend\assets\css\apps\contacts.css" rel="stylesheet" type="text/css">
    <!-- END PAGE LEVEL STYLES -->  
     <link rel="stylesheet" type="text/css" href="backend\assets\css\forms\switches.css">
     <link href="\backend\assets\css\authentication\form-2.css" rel="stylesheet" type="text/css">
     <link href="\backend\assets\css\apps\notes.css" rel="stylesheet" type="text/css">
    <link href="\backend\assets\css\forms\theme-checkbox-radio.css" rel="stylesheet" type="text/css">
    <link href="\backend\assets\css\apps\invoice.css" rel="stylesheet" type="text/css">
    <link href="\backend\assets\css\users\user-profile.css" rel="stylesheet" type="text/css">

    <link href="\backend\plugins\apex\apexcharts.css" rel="stylesheet" type="text/css">
    <link href="\backend\assets\css\dashboard\dash_1.css" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->
   
 
 <script type="text/javascript">
      function submitForm(myform,myaction,myresponse){    
        var form=$(myform);
        jQuery.ajax({
                type:"POST",
                url:myaction,
                data:form.serialize(),
                success: function(response){
                    alert("asdsa");
                },
                error:function(response){
                    alert("hata");
                }
                dataType:"json"
            });
        }
  </script>
