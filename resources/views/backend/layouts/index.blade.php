<!DOCTYPE html>
<html lang="en">
<head>
    @include('backend.parts.head')
</head>
<body>
  
 @include('backend.parts.header')
    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>
         @include('backend.parts.sidebar')
        <!--  BEGIN SIDEBAR  -->
        
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
        	@yield('content')
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    @include('backend.parts.head')
</body>
</html>