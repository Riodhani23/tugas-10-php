<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Account Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

    <style>
        .form-icon {
            text-align: center;
            background-color: #5891ff;
            border-radius: 50%;
            font-size: 50px;
            color: white;
            width: 100px;
            height: 100px;
            margin: auto;
            margin-bottom: 20px;
            margin-left: 100px;
            line-height: 100px;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-image: url('path-to-your-background-image.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Arial', sans-serif;
            color: #495057;
        }

        form {
            width: 35%;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2em;
            color: #007bff;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input.form-control {
            border-radius: 5px;
            margin-bottom: 10px;
        }

        button.btn-primary {
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <div class="form-icon">
            <span><i class="icon icon-user"></i></span>
        </div>
    </header>

    <form action="p_form.php">
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nomor Rekening</label> 
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-credit-card-alt"></i>
                        </div>
                    </div> 
                    <input id="text" name="text" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text1" class="col-4 col-form-label">Nama Customer</label> 
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-book"></i>
                        </div>
                    </div> 
                    <input id="text1" name="text1" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="text2" class="col-4 col-form-label">Saldo Awal</label> 
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-money"></i>
                        </div>
                    </div> 
                    <input id="text2" name="text2" type="text" class="form-control">
                </div>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>
