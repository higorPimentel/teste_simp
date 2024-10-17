<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>

    <style>

        body{
            font-family: sans-serif;
        }

        h1{
            margin-right:500px; 
            color:gray;
        }


        p{
            margin-right:500px; 
        }

        
        hr{
            height:1px;
            width:700px;
            margin-top:30px;
            margin-bottom:30px;
            background-color:rgb(219, 217, 217);
            border:none;
        }

        .frm-envio {
            display: flex;
            flex-wrap: wrap;
            border:solid 1px rgb(228, 228, 228);
            margin:100px;
            padding-top:30px;
            padding-bottom:30px;
            align-items: center;
            justify-content: center;
        }

        .row{
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: center;

        }

        .input_entrada {
            width: 500px;
            height:30px;
            border:solid 1px rgb(192, 187, 187);
            outline:none;
            border-radius:2px;  
        }

        .btn{
            padding:8px 50px;   
            background-color:rgb(48, 41, 41);
            border:solid 1px rgb(48, 41, 41);
            color:white;
            cursor:pointer;
            transition:0.3s;
            margin-left:20px;  
            border-radius:2px;          
        }

        .btn:hover{
            background-color:rgb(84, 80, 80);
            /* box-shadow:0px 0px 10px black; */
            /* color:black; */
        }

        .btn_voltar {
            padding:8px 50px;   
            margin-right:550px; 
            background-color:#CFCFCF;
            border:solid 1px #CFCFCF;
            color:black;
            cursor:pointer;
            transition:0.3s;
            border-radius:10px;
            font-weight:500;
        }


        .table {
            width: 80%;
            margin-bottom: 1rem;
            color: #212529;
            border-collapse: collapse;
            /* background-color:#E8E8E8; */
            background-color:#f6f6f6;
            margin-top:50px;
            margin-left:100px;
            /* margin-right:100px; */
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .table .table {
            background-color: #f8f9fa;
        }
        
        .isPalidromo{
            color:blue;
        }

        .notPalidromo{
            color:red;
        }


    </style>
</head>