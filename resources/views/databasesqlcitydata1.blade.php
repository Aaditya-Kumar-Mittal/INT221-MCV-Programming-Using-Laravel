<div>
    Database data


    {{print_r($data)}}

    <br><br><br>
    <table border="1">
        <tr>
            <td>
                City
            </td>
            <td>
                Population
            </td>
            <td>
                Country
            </td>


        </tr>
        @foreach($data as $row)
            <tr>
                <td>
                    {{$row->city_name}}
                </td>
                <td>
                    {{$row->population}}
                </td>
                <td>
                    {{$row->country}}
                </td>
            </tr>
        @endforeach
    </table>
</div>