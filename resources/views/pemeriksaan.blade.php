<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemeriksaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .container {
        display: flex;
        justify-content: center;
        }

        table {
        max-width: 100%;
        border-collapse: collapse;
        }

        td {
        text-align: center;
        padding: 10px;
        border: 1px solid;
        }
    </style>
</head>
<body>
    <div class="container-fluid py-2">
    <div class="col-md-12">
    <h3 class="text-center">Pemeriksaan</h3>
    <form>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama :</label> 
            <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_pemeriksaan" class="col-4 col-form-label">Tanggal Pemeriksaan :</label> 
            <div class="col-8">
            <input id="tgl_pemeriksaan" name="tgl_pemeriksaan" type="date" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir/Usia :</label> 
            <div class="col-8">
            <input id="tgl_lahir" name="tgl_lahir" type="number" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin :</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="lk" required="required"> 
                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="pr" required="required"> 
                <label for="jk_1" class="custom-control-label">Perempuan</label>
            </div>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <table class="container">
        <tr>
            <td>Jenis Tes</td>
            <td>Hasil Pemeriksaan</td>
            <td>Normal</td>
        </tr>
        <tr>
            <td>Tekanan Darah</td>
            <td></td>
            <td>120/80 mmhg</td>
        </tr>
        <tr>
            <td>Asam Urat</td>
            <td></td>
            <td>Pria: < 7 mg/dl | Wanita: < 6 mg/dl</td>
        </tr>
        <tr>
            <td>Kolesterol Total</td>
            <td></td>
            <td>< 200 mg/dl</td>
        </tr>
        <tr>
            <td rowspan="3">Gula Darah</td>
            <td rowspan="3"></td>
            <td>Puasa: 70-110 mg/dl</td>
        </tr>
        <tr>
            <td>2 jam setelah makan: 100-150 mg/dl</td>
        </tr>
        <tr>
            <td>Sewaktu/acak: 70-125 mg/dl</td>
        </tr>
    </table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>