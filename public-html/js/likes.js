$(function() {
    // Get all likes
    $.get('/get-likes', function(likes) {
        // For each like, display the count
        $.each(likes, function(i, like) {
            console.log(like);
            $('.like-count[data-student-id="' + like.student_id + '"]').text(like.count);
        });
    })

    $('button.add-like').click(function() {
        let buttonText = $(this).text();
        let button = this;

        $(this).text('...');
        $(this).attr("disabled", true);

        console.log($(this).data("student-id"));

        $.post('/like', { student_id: $(this).data("student-id") }, function(err) {
            if (err) {
                console.log(err);
            }

            $(button).text(buttonText);
            $(button).attr("disabled", false);
        });
    });
});