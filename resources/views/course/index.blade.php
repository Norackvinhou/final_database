
<a href="{{URL('/course/create')}}">+ add New Course</a>

<h3>Course List:</h3>


<table border=1>
                                      <thead>
                                        <tr>
                                        <th>C_ID</th>
                                            <th>Course name</th>
                                            <th>Department</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($course as $c)
                                        <tr>
                                            <td>{{$c->cid}}</td>
                                            <td>{{$c->cname}}</td>
                                            <td>{{$c-> department -> dname}}</td>
                                            <td> <a href="{{url('/course/edit/'.$c->cid)}}">edit</a></td>
                                            <td> <a href="{{url('/course/delete/'.$c->cid)}}">delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
</table>