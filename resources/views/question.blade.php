@extends('layouts.app')
<?php
echo '<link href="style.php" rel="stylesheet">';
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


@section('content')
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Question</div>

                    <div class="card-body">

                        {{$question->body}}
                    </div>
                    <div class="card-footer">
                        <a class="btn btn-primary float-right"
                           href="{{ route('questions.edit',['id'=> $question->id])}}">
                            Edit Question
                        </a>

                        {{ Form::open(['method'  => 'DELETE', 'route' => ['questions.destroy', $question->id]])}}
                        <button class="btn btn-danger float-right mr-2" value="submit" type="submit" id="submit">Delete
                        </button>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><a class="btn btn-primary float-left"
                                                href="{{ route('answers.create', ['question_id'=> $question->id])}}">
                            Answer Question
                        </a></div>



                    <div class="card-body">
                        @forelse($question->answers as $answer)
                            <div class="card">
                                <div class="card-body">{{$answer->body}}</div>
                                <div class="card-footer">


                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            document.getElementById('add').addEventListener('click', function() {
                                                document.getElementById('votenumber').innerText++;
                                            });
                                        });
                                    </script>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            document.getElementById('subtract').addEventListener('click', function() {
                                                document.getElementById('votenumber').innerText--;
                                            });
                                        });
                                    </script>




                                    <div class="upvote" id='add' > <span class="glyphicon glyphicon-arrow-up"></span> </div>
                                    <p id="votenumber"> 0 </p>



                                    <a class="upvote" id='add'
                                       href="{{ route('votes.update',['id'=> $question->id])}}">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>


                                    {{$answer->id}}
                                    <div class="downvote" id='subtract' >   <span class="glyphicon glyphicon-arrow-down"></span> </div>







                                    <div class="share" >    <span class="glyphicon glyphicon-share-alt"></span> <p> Share </p></div>




                                    <a class="btn btn-primary float-right"
                                       href="{{ route('answers.show', ['question_id'=> $question->id,'answer_id' => $answer->id]) }}">
                                        View
                                    </a>

                                    <a class="btn btn-danger float-right"
                                       href="{{ route('answers.show', ['question_id'=> $question->id,'answer_id' => $answer->id]) }}">
                                        Report
                                    </a>

                                </div>
                            </div>
                        @empty
                            <div class="card">

                                <div class="card-body"> No Answers</div>
                            </div>
                        @endforelse
                    </div>


                    </div>
                </div>
            </div>
@endsection
    </div>