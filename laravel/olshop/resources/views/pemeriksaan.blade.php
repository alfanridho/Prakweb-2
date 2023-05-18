<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemeriksaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <section class="py-2">
        <div class="container">
            <form>
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                            <input id="text" name="text" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text1" class="col-4 col-form-label">Tanggal Pemeriksaan</label>
                    <div class="col-8">
                        <input id="text1" name="text1" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text3" class="col-4 col-form-label">Tanggal Lahir</label>
                    <div class="col-8">
                        <input id="text3" name="text3" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="l">
                            <label for="radio_0" class="custom-control-label">L</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="p">
                            <label for="radio_1" class="custom-control-label">P</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Jenis Tes</th>
                        <th scope="col">Hasil Pemeriksaan</th>
                        <th scope="col">Normal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tekanan darah </td>
                        <td></td>
                        <td>120/80 mmhg</td>
                    </tr>
                    <tr>
                        <td>Asam urat </td>
                        <td></td>
                        <td>Pria : < 7 mg/dl | Wanita: < 6 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Kolesterol total</td>
                        <td></td>
                        <td>
                            < 200 mg/dl</td>
                    </tr>
                    <tr>
                        <td>Gula Darah</td>
                        <td></td>
                        <td>Puasa: 70-110 mg/d</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>Sewaktu/acak : 70-125 mg/d</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>