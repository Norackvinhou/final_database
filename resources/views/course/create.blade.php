<h1> Course </h1>
<form action="{{URL('/course/create')}}" method="POST" >
                            @csrf
                               <input type="text" name="cid" placeholder="Course ID:"> 
                                        <br> <br>
                                <input type="text" name="cname" placeholder="Course name:"> 
                                <br> <br>
                               <select name="did" id="">
                                   @foreach($department as $d)
                                   <option value="{{$d->did}}">{{$d->dname}}</option>
                                   @endforeach
                               </select>
                               <br><br>
                                 <button type="submit">
                                    Register
                                </button>    
</form>