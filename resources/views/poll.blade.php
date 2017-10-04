<style type="text/css" media="screen">
    .hide {
        display:none;
    }
    .poll-results {
        background:#fff;
        color:#000;
        padding:20px;
    }
    .poll-option {
        margin:10px 0;
    }
    .poll-result {
        margin:10px 0;
    }
    .result-box {
        background:#e1e1e1;
        border:solid 1px #c1c1c1;
        height:20px;
        overflow:hidden;
    }
    .result-bg {
        height:30px;
        width:0;
    }
    .result-bg-fill {
        background:rgb(134, 170, 218);
        height:30px;
        width:0;
    }
    .poll-results.animate .result-bg-fill {
        width:100%;
        -webkit-transition: width 500ms ease-out 500ms;
        -moz-transition: width 500ms ease-out 500ms;
        -o-transition: width 500ms ease-out 500ms;
        transition: width 500ms ease-out 500ms;
    }
</style>


<div id="poll-container">

    <h2 class="poll-question">{{$poll->question}}</h2>

    {{ Form::open(array('url' => URL::route('poll').'#poll-container', 'class' => 'poll-form')) }}

    {{-- This is used to return the user back to this page --}}
    {{ Form::hidden('return', Request::url().'#poll-container') }}

    {{ Form::hidden('id', $poll->id) }}

    <p class="poll-form--error hide" id="test_poll_form_error">Please choose a poll option</p>
    <div class="poll-option">
        {{ Form::label('poll_form_answer1', $poll->a) }}
        {{ Form::radio('answer', $poll->a, false, array('poll_form_answer1')) }}
    </div>
    <div class="poll-option">
        {{ Form::label('poll_form_answer2', $poll->b) }}
        {{ Form::radio('answer', $poll->b, false, array('poll_form_answer2')) }}
    </div>
    <div class="poll-option">
        {{ Form::label('poll_form_answer3', $poll->c) }}
        {{ Form::radio('answer', $poll->c, false, array('poll_form_answer3')) }}
    </div>
    <div class="">
        {{ Form::submit(trans('laravel-poll::messages.form.submit'), array('class' => 'btn')) }}
    </div>

    {{ Form::close() }}

    <div class="poll-results hide" data-total="{{$poll->a_count + $poll->b_count + $poll->c_count}}">
        <div class="poll-result" data-score="{{$poll->a_count}}" data-answer="{{$poll->a}}">
            <p>{{$poll->a}} - <span class="percent"></span></p>
            <div class="result-box">
                <div class="result-bg">
                    <div class="result-bg-fill"></div>
                </div>
            </div>
        </div>
        <div class="poll-result" data-score="{{$poll->b_count}}" data-answer="{{$poll->b}}">
            <p>{{$poll->b}} - <span class="percent"></span></p>
            <div class="result-box">
                <div class="result-bg">
                    <div class="result-bg-fill"></div>
                </div>
            </div>
        </div>
        <div class="poll-result" data-score="{{$poll->c_count}}" data-answer="{{$poll->c}}">
            <p>{{$poll->c}} - <span class="percent"></span></p>
            <div class="result-box">
                <div class="result-bg">
                    <div class="result-bg-fill"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" charset="utf-8" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('form.poll-form').on('submit', function(e){
            // e.preventDefault();
            var	submittedAnswer = $('input[name="answer"]:checked').val();
            if ( ! submittedAnswer ) {
                $('.poll-form--error').removeClass('hide');
            } else {
                var total = $('.poll-results').data('total') + 1;
                var score, percent;
                $('.poll-result').each(function(index, value){
                    score = $(value).data('score');
                    if ( submittedAnswer == $(value).data('answer') ) {
                        score++;
                    }
                    percent = Math.round( score / total * 100);
                    $(value).find('.result-bg').css('width', percent.toString()+'%');
                    $(value).find('span.percent').html(percent.toString()+'%');
                });
                $( this ).addClass('hide');
                $('.poll-results').removeClass('hide');
                window.setTimeout(function(){
                    $('.poll-results').addClass('animate');
                }, 10);
            }
        });
    });
</script>