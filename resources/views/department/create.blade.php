


<h1> Department </h1>
<form action="{{URL('/department/create')}}" method="POST" >
                            @csrf
                               <input type="text" name="did" placeholder="department ID:"> 
                                        <br> <br>
                                <input type="text" name="dname" placeholder="department name:"> 
                                <br> <br>
                                 <button type="submit">
                                    Register
                                </button>
                                
                                
</form>
