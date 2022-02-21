<h1> Course </h1>

<form action="{{URL('/course/update/'.$course->cid)}}" method="POST" >
                            @csrf
                           
                               <input type="text" name="cid" placeholder="Course ID:" value="{{$course->cid}}"> 
                                        <br> <br>
                                <input type="text" name="cname" placeholder="Course name:" value="{{$course->cname}}"> 
                                <br> <br>
                               <select name="did" id="">
                                   @foreach($department as $d)
                                   <option value="{{$d->did}}">{{$d->dname}}</option>
                                   @endforeach
                               </select>
                               <br><br>
                                 <button type="submit">
                                    update
                                </button>    
</form>