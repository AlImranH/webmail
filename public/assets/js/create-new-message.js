$(document).ready(function () {
    // begin add remove cc row
    $("#addCc").on('click', function () {
        $("#ccRow").removeClass('d-none');
        $("#addCc").addClass('d-none');
    });
    $("#removeCc").on('click', function () {
        $("#ccRow").addClass('d-none');
        $("#addCc").removeClass('d-none');
    });
    // end add remove cc row
    // begin ad remove bcc row
    $("#addBcc").on('click', function () {
        $("#bccRow").removeClass('d-none');
        $("#addBcc").addClass('d-none');
    });
    $("#removeBcc").on('click', function () {
        $("#bccRow").addClass('d-none');
        $("#addBcc").removeClass('d-none');
    });
    // end ad remove bcc row
    // begin add remove reply on row
    $("#addReply").on('click', function () {
        $("#replyRow").removeClass('d-none');
        $("#addReply").addClass('d-none');
    });
    $("#removeReply").on('click', function () {
        $("#replyRow").addClass('d-none');
        $("#addReply").removeClass('d-none');
    });
    // end add remove reply on row
    // begin add remove followup row
    $("#addFollowup").on('click', function () {
        $("#followupRow").removeClass('d-none');
        $("#addFollowup").addClass('d-none');
    });
    $("#removeFollowup").on('click', function () {
        $("#followupRow").addClass('d-none');
        $("#addFollowup").removeClass('d-none');
    });
    // end add remove followup row
});
