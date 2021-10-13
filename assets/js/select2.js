$('.select-course').click(function (e) {
    e.preventDefault();
    var courseId = $(this).attr('value');
    $('.select-id').val(courseId);
    $('.course-name').html($(this).text());
    $('#course-info').slideDown(500);
});