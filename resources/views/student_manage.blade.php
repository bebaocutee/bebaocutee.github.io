{{-- view manage --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <style>
        td, th{
            vertical-align:middle; 
            border: 1px solid white;

        }
        thead{
            background-color: rgba(112, 186, 240, 0.905);
        }
        .container{
            max-width: 1290px;
            margin: auto;
        }
        table{
            border: 1px solid white;
        }
        header {
            text-align: center;
            font-size: 30px;
            color: white;
            background-color: rgba(112, 186, 240, 0.905);
            margin-bottom: 20px;
        }

        .button {
            padding: 7px;
            font-size: 15px;
            border: 1px black solid;
            color: black;
            background-color: rgba(112, 186, 240, 0.905);
            border-radius: 3px;
            font-weight: 500;
            text-decoration: unset;

        }

        .button:hover {
            color: yellow;
            background-color: deepskyblue;
        }
    </style>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">BirthDay</th>
                    <th scope="col">Address</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                use App\Models\Student;
                $st = new Student();
                $results = $st->get_all_student();
                foreach ($results as $result) {
                    echo 
                    "<tr>
                        <th scope=\"row\">" . $result->id . "</th>
                        <td>" . $result->fullname . "</td>
                        <td>" . $result->birthday . "</td>
                        <td>" . $result->address . "</td>
                        <td><a class=\"button\" href=\"edit?id=" . $result->id . "\">Edit</a></td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
        <a class="button" href="add">Add Student</a>
    </div>
    <script type="text/javascript">
        function delete_student(id){
            alert("ID:" + id);
        }
    </script>
</body>

</html>
