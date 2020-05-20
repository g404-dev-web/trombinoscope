$(function() {
    var $getLikeCount = function(student_id) {
        return $('.like-count[data-student-id="' + student_id + '"]');
    }

    // Get all likes
    $.get('/get-likes', function(likes) {
        // For each like, display the count
        $.each(likes, function(i, like) {
            console.log(like);
            $getLikeCount(like.student_id).text(like.count);
        });
    })

    $('button.add-like').click(function() {
        let buttonText = $(this).text();
        let button = this;
        let studentId = $(this).data("student-id");

        $(this).text('...');
        $(this).attr("disabled", true);

        console.log(studentId);

        $.post('/like', { student_id: studentId }, function(err) {
            if (err) {
                console.log(err);
            } else {
                let $likeCount = $getLikeCount(studentId);
                $likeCount.text(parseInt($likeCount.text()) + 1)
            }

            $(button).text(buttonText);
            $(button).attr("disabled", false);
        });
    });
});