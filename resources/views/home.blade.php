<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/allstyles.css">
</head>
<body>

<div class="header">
  <h1>Horticulture Website</h1>
  <p>Make the world green</p>
</div>

<div class="navbar">
    <a href="{{ route('home') }}">Home</a>
    @if (session('user_type') === 'seller')
    <a href="{{ route('seller.home') }}">Seller</a>
@elseif (session('user_type') === 'buyer')
    <a href="{{ route('buyer.home') }}">Buyer</a>
@endif
<a href="{{ route('blogposts') }}">Blog</a>
    <a href="{{ route('login') }}" class="right">Log-in</a>
</div>



   

      @foreach($editableTexts as $editableText)
        <div class="editable-record" data-id="{{ $editableText->id }}">
            <h1 class="editableTitle">{{ $editableText->title }}</h1>
            <p class="editableContent">{{ $editableText->content }}</p>
            <button class="editButton">Edit Text</button>
            <button class="deleteButton">Delete</button>
            

            <div class="editModal" style="display: none;">
                <input type="text" class="editedTitle" value="{{ $editableText->title }}"><br>
                <textarea class="editedContent">{{ $editableText->content }}</textarea>
                <button class="saveButton">Save Changes</button>
                <button class="cancelButton">Cancel</button> <!-- Add Cancel Button -->
            </div>
        </div>
    @endforeach

    <button id="addRecord">Add Record</button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.editButton').click(function() {
                var $parent = $(this).closest('.editable-record');
                $parent.find('.editedTitle').val($parent.find('.editableTitle').text());
                $parent.find('.editedContent').val($parent.find('.editableContent').text());
                $parent.find('.editModal').show();
            });

            $('.saveButton').click(function() {
                var $parent = $(this).closest('.editable-record');
                var id = $parent.data('id');
                var editedTitle = $parent.find('.editedTitle').val();
                var editedContent = $parent.find('.editedContent').val();
                $.ajax({
                    url: "{{ route('editable-text.update') }}",
                    type: 'POST',
                    data: {
                        id: id,
                        title: editedTitle,
                        content: editedContent,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $parent.find('.editableTitle').text(editedTitle);
                            $parent.find('.editableContent').text(editedContent);
                            $parent.find('.editModal').hide();
                        }
                    }
                });
            });

            $('.deleteButton').click(function() {
                var $parent = $(this).closest('.editable-record');
                var id = $parent.data('id');
                $.ajax({
                    url: "{{ route('editable-text.delete') }}",
                    type: 'POST',
                    data: {
                        id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $parent.remove();
                        }
                    }
                });
            });

            $('.cancelButton').click(function() {
    var $parent = $(this).closest('.editable-record');
    var originalTitle = $parent.find('.editableTitle').text();
    var originalContent = $parent.find('.editableContent').text();
    $parent.find('.editedTitle').val(originalTitle);
    $parent.find('.editedContent').val(originalContent);
    $parent.find('.editModal').hide();
});

            $('#addRecord').click(function() {
    $.ajax({
        url: "{{ route('editable-text.store') }}",
        type: 'POST',
        data: {
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            if (response.success) {
                // Reload the page or update the UI as needed
                window.location.reload(); // Reload the page for demonstration
            }
        }
    });
});
        });
    </script>

      
  
  </body>
  </html>
  