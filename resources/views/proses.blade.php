<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js" ></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>


@if ($data->msg == 'success')
<div class="alert alert-dismissable alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>   
    <strong>{{ 'data uploaded succesfully' }}</strong>
</div>
@endif

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3>PBKK</h3>
                        <h3 class="my-4">Data Yang Di Input : </h3>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <td style="width:150px">Pasien</td>
                                <td>{{ $data->pasien }}</td>
                            </tr>
                            <tr>
                                <td>dokter</td>
                                <td>{{ $data->dokter }}</td>
                            </tr>
                            <tr>
                                <td>Condition</td>
                                <td>{{ $data->condition }}</td>
                            </tr>
                            <tr>
                                <td>Temperature</td>
                                <td>{{ $data->temperature }}</td>
                            </tr>
    
                            <img src="images/{{ $data->image_name }}">
                        </table>

                        <a href="/form" class="btn btn-primary">Kembali</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html> 