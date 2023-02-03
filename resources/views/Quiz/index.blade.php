@extends('Layout.layout')
@section('content')
    <script>
        var checkedRadio = []

        function updateProgressBar(chkboxName) {
            if (!checkedRadio.includes(chkboxName)) {

                checkedRadio.push(chkboxName);

                var currentProgress = parseInt(document.getElementById('currentProgress').value);
                var percentInterval = parseInt(document.getElementById('percentInterval').value);
                var newCurrentProgress = currentProgress + percentInterval;

                if (newCurrentProgress >= 100) {
                    newCurrentProgress = 100;
                    document.getElementById("viewResultButton").disabled = false;
                }

                document.getElementById('currentProgress').value = newCurrentProgress;
                document.getElementById('progressBar').style.width = newCurrentProgress + '%';
                document.getElementById('progressBar').innerHTML = newCurrentProgress + '%';
            }
        }
    </script>
    <div class="d-flex justify-content-center">
        <div class="sticky-div">
            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100">
                <input type="text" id='percentInterval' value={{ ceil(100 / count($quizzes)) }} hidden>
                <input type="text" id='currentProgress' value='0' hidden>
                <div class="progress-bar bg-dark" id='progressBar' style="width: 0%">0%</div>
            </div>
        </div>
        <script>
            stickyElem = document.querySelector(".sticky-div");
            currStickyPos = stickyElem.getBoundingClientRect().top + window.pageYOffset;
            window.onscroll = function() {
                if (window.pageYOffset > currStickyPos) {
                    stickyElem.style.position = "fixed";
                    stickyElem.style.top = "0px";
                } else {
                    stickyElem.style.position = "relative";
                    stickyElem.style.top = "initial";
                }
            }
        </script>
    </div>
    <div class="container">
        <form action="{{ url('/calculating') }}" method="POST">
            @csrf
            <div class="my-2">
                @foreach ($quizzes as $quiz)
                    <div class="card quizCard my-4">
                        <div class="card-body quizText text-center">
                            {{ $quiz->quiz }}
                        </div>
                        <div>
                            <div class="text-center my-4">
                                <table width="100%">
                                    <tr>
                                        <td width="20%">Strongly Disagree</td>
                                        <td width="20%">Disagree</td>
                                        <td width="20%">Neutral</td>
                                        <td width="20%">Agree</td>
                                        <td width="20%">Strongly Agree</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" class="quizRadio" name="{{ 'quiz_' . $quiz->id }}"
                                                onchange="updateProgressBar({{ $quiz->id }})" value="{{$quiz->major->major}},-2">
                                        </td>
                                        <td>
                                            <input type="radio" class="quizRadio" name="{{ 'quiz_' . $quiz->id }}"
                                                onchange="updateProgressBar({{ $quiz->id }})" value="{{$quiz->major->major}},-1">
                                        </td>
                                        <td>
                                            <input type="radio" class="quizRadio" name="{{ 'quiz_' . $quiz->id }}"
                                                onchange="updateProgressBar({{ $quiz->id }})" value="{{$quiz->major->major}},0">
                                        </td>
                                        <td>
                                            <input type="radio" class="quizRadio" name="{{ 'quiz_' . $quiz->id }}"
                                                onchange="updateProgressBar({{ $quiz->id }})" value="{{$quiz->major->major}},1">
                                        </td>
                                        <td>
                                            <input type="radio" class="quizRadio" name="{{ 'quiz_' . $quiz->id }}"
                                                onchange="updateProgressBar({{ $quiz->id }})" value="{{$quiz->major->major}},2">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <hr>
                    </div>
                @endforeach
                <div class="text-end mb-5">
                    <button class="btn btn-dark px-5 py-3" id='viewResultButton' disabled>View Result</button>
                </div>
            </div>
        </form>
    </div>
@endsection
