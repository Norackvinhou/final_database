<h1> Department </h1>
<form action="{{URL('/department/update', $department->did)}}" method="POST" >
                            @csrf
                               <input type="text" name="did" placeholder="department ID:" value="{{$department->did}}"> 
                                        <br> <br>
                                <input type="text" name="dname" placeholder="department name:" value="{{$department->dname}}"> 
                                
                                <br> <br>
                                 <button type="submit">
                                    update
                                </button>
                                
                                
</form>