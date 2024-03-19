<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Forum Posting Details</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Bootstrap Icons (optional) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" />
  <style>
    /* Custom styles for the comment textbox */
    .comment-textbox {
      width: 100%;
      padding: 10px;
      border: 1px solid #ced4da;
      border-radius: 4px;
      margin-bottom: 15px;
    }

    /* Custom styles for the back button */
    .back-button {
      font-size: 1.5em;
      color: #000;
      /* Change the color as needed */
      text-decoration: none;
      margin-right: 10px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <!-- Add Back Button -->
    <button type="button" class="btn btn-secondary mb-3 back-button" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Tooltip on right">
      <a href="/diskusi-materi-kuliah" style="color: white">
        <i class="bi bi-caret-left-fill"></i>
      </a>
    </button>



    <!-- Posting Content -->
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">Forum Post Title</h5>
        <p class="card-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
          posuere erat a ante.
        </p>
        <p class="card-text">
          <small class="text-muted">Posted by User123 - 2 hours ago</small>
        </p>
      </div>
    </div>

    <!-- Comments Section -->
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">Comments</h5>

        <!-- Single Comment -->
        <div class="media mb-3">
          <img src="https://via.placeholder.com/50" class="mr-3 rounded-circle" alt="User Avatar" />
          <div class="media-body">
            <h6 class="mt-0">Commenter1</h6>
            <p>Comment content goes here.</p>
            <p><small class="text-muted">Posted 30 minutes ago</small></p>
          </div>
        </div>

        <!-- Another Comment -->
        <div class="media">
          <img src="https://via.placeholder.com/50" class="mr-3 rounded-circle" alt="User Avatar" />
          <div class="media-body">
            <h6 class="mt-0">Commenter2</h6>
            <p>Another comment content goes here.</p>
            <p><small class="text-muted">Posted 1 hour ago</small></p>
          </div>
        </div>

        <!-- Add your own comments as needed -->

        <!-- Comment Textbox -->
        <input type="text" class="comment-textbox" placeholder="Type your comment..." />
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (optional, but needed for certain features) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>