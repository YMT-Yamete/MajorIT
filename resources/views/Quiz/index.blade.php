@extends('Layout.layout')
@section('content')
    <div class="container">
        <div class="my-5">
            <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0"
                aria-valuemax="100">
                <div class="progress-bar bg-dark" style="width: 25%">25%</div>
            </div>
            <div class="card quizCard my-4">
                <div class="card-body quizText text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, nihil.
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
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
            </div>
            <div class="card quizCard my-4">
                <div class="card-body quizText text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, nihil.
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
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
            </div>
            <div class="card quizCard my-4">
                <div class="card-body quizText text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, nihil.
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
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
            </div>
            <div class="card quizCard my-4">
                <div class="card-body quizText text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, nihil.
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
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
            </div>
            <div class="card quizCard my-4">
                <div class="card-body quizText text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, nihil.
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
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                                <td><input type="radio" class="quizRadio" name="answer"></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <hr>
            </div>
            <div class="text-end">
                <a href="{{ url('/results/1') }}" class="btn btn-dark px-5 py-3">Next</a>
            </div>
        </div>
    </div>
@endsection
