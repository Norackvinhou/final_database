<a href="{{URL('/department/create')}}">+ add New Department</a>
<h3>Department List:</h3>


<table border=1>
                                      <thead>
                                        <tr>
                                        <th>D_ID</th>
                                            <th>Department name</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($department as $d)
                                        <tr>
                                            <td>{{$d->did}}</td>
                                            <td>{{$d->dname}}</td>
                                            <td> <a href="{{url('/department/edit/'.$d->did)}}">edit</a></td>
                                            <td> <a href="{{url('/department/delete/'.$d->did)}}">delete</a></td>
                                       
                                        </tr>
                                        @endforeach
                                    </tbody>
</table>