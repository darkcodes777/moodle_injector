<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />

<title></title>
<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    .search-box{
        width: 300px;
        position: relative;
        border:none;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
    	border: none;
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
        outline: none;
  	}
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>

</head>
<body bgcolor="#373A3C">
</body>
</html>
