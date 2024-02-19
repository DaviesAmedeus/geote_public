//document.addEventListener('DOMContentLoaded', function() {
//    var postContent = document.getElementById('postContent');
//    var maxLength = 150; // Adjust this value to control the number of characters to display
//
//    // Check if the content needs to be truncated
//    if (postContent.innerText.length > maxLength) {
//        var truncatedText = postContent.innerText.substring(0, maxLength) + '... ';
//
//        // Create a span element for the truncated text
//        var truncatedSpan = document.createElement('span');
//        truncatedSpan.innerHTML = truncatedText;
//
//        // Create a span element for the "Read More" link
//        var readMoreSpan = document.createElement('span');
//        readMoreSpan.innerHTML = '<a href="#" onclick="showFullContent()">Read More</a>';
//
//        // Clear the original content and append the truncated and "Read More" spans
//        postContent.innerHTML = '';
//        postContent.appendChild(truncatedSpan);
//        postContent.appendChild(readMoreSpan);
//    }
//});
//
//// Function to show the full content
//function showFullContent() {
//    var postContent = document.getElementById('postContent');
//    postContent.innerHTML = '{{post.post_content|safe}}';
//}


//    document.addEventListener('DOMContentLoaded', function() {
//        var postContent = document.getElementById('postContent');
//
//        // Check if the element exists before accessing properties
//        if (postContent) {
//            console.log('HAHAHHA')
//            var maxLength = 10;
//
//            if (postContent.innerText.length > maxLength) {
//                var truncatedText = postContent.innerText.substring(0, maxLength) + '... ';
//                var truncatedSpan = document.createElement('span');
//                truncatedSpan.innerHTML = truncatedText;
//
//                var readMoreSpan = document.createElement('span');
//                readMoreSpan.innerHTML = '<a href="#" onclick="showFullContent()">Read More</a>';
//
//                postContent.innerHTML = '';
//                postContent.appendChild(truncatedSpan);
//                postContent.appendChild(readMoreSpan);
//            }
//        }
//    });
//
//    function showFullContent() {
//        var postContent = document.getElementById('postContent');
//        postContent.innerHTML = '{{ post.post_content|safe }}';
//    }
