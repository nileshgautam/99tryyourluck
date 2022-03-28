@extends('website.layouts.main')
@section('main-section')
    <main class="main Quiz-bgColor">
        <section class="quiz_section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="quiz_box">
                            <header class="quiz_header">
                                <div class="title">99tryyourluck</div>
                                <div class="timer">
                                    <div class="time_left_txt">Time Left</div>
                                    <div class="timer_sec">1000</div>
                                </div>
                                <div class="time_line"></div>
                            </header>
                            <section class="qna-list bg-white">
                                <div class="que_text text-dark">
                                    <!-- question showing from js -->
                                </div>
                                <div class="option_list">
                                    <!-- options showing from js -->
                                </div>
                            </section>
                            <!-- footer of Quiz Box -->
                            <footer class="quiz_footer">
                                <div class="total_que">
                                    <!-- showing from js -->
                                </div>
                                <button class="btn btn-custom-sec next_que_btn" type="button">Next</button>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function() {
            const questions = [{
                    id: 1,
                    question: "This is question 1",
                    answers: [{
                            id: 1,
                            text: "option 1 answer 1",
                        },
                        {
                            id: 2,
                            text: "option 2 answer 1",
                        },
                        {
                            id: 3,
                            text: "option 3 answer 1",
                        },
                        {
                            id: 4,
                            text: "option 4 answer 1",
                        },
                    ],
                },
                {
                    id: 2,
                    question: "This is question 2",
                    answers: [{
                            id: 1,
                            text: "option 1 answer 2",
                        },
                        {
                            id: 2,
                            text: "option 2 answer 2",
                        },
                        {
                            id: 3,
                            text: "option 3 answer 2",
                        },
                        {
                            id: 4,
                            text: "option 4 answer 2",
                        },
                    ],
                },
            ]; // all questions
            let qNumber = 1; // question number

            const showQuestion = () => {
                const question = questions[qNumber - 1];
                $('.que_text').text(`${qNumber}. ${question.question}`);
                $('.option_list').html('');
                question.answers.forEach(function(answer, index) {
                    const option = $(`<div class="option_grp">
          <input type="radio" class="btn-check" name="q${qNumber}o" id="q${qNumber}o${answer.id}" value="${answer.id}">
          <label class="option" for="q${qNumber}o${answer.id}">${answer.text}</label>
        </div>`);
                    $('.option_list').append(option);
                });
                $('.total_que').text(`${qNumber} of ${questions.length} questions`);
                if (qNumber == questions.length) {
                    $('.next_que_btn').text('Finish');
                }
            } // show question function
            const timeInterval = () => {
                let timeLeft = $('.timer_sec').text();
                if (timeLeft > 0) {
                    timeLeft--;
                    $('.timer_sec').text(timeLeft);
                } else if (timeLeft == 0) {
                    $('.next_que_btn').trigger('click');
                }
            } // time interval function
            window.interval = setInterval(timeInterval, 1000); // timer interval

            showQuestion(); // show first question

            $('.next_que_btn').on('click', function() {
                clearInterval(window.interval);
                if (qNumber < questions.length) {
                    qNumber = qNumber + 1;
                    showQuestion();
                    $('.timer_sec').text('10'); // reset timer
                    window.interval = setInterval(timeInterval, 1000); // restarting timer
                } else {
                    // alert('Quiz Completed');
                    location.replace('game-finished.php');
                }
            }); // next question button click
        });
    </script>
@endsection
