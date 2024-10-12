<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>title</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="jess.css">
</head>
<body>
    <div class="container container1 mb-5 fixed-top">
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-auto">
                <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Master Data
                    </a>
                  
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="masterCategory.php">Master Event Category</a></li>
                      <li><a class="dropdown-item" href="masterOrg.php">Master Organizer</a></li>
                      <li><a class="dropdown-item" href="masterEvent.php">Master Event</a></li>
                    </ul>
                  </div>
            </div>
            <div class="col-sm-auto">
                <a href="base.php">Event</a>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <hr style="width: 100%; border: 1px solid black;">

        </div>
    </div>

    <div class="container p-3 mt-5" id="masterCatego">
        <div class="row">
            <div class="col-sm-auto">Event Category</div>
            <div class="col-sm-auto">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">+Create</button>
            </div> 
            <div class="col"></div>
        </div>
        
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Event Category</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Event Name:</label>
              <input type="text" class="form-control" id="eventName">
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Location:</label>
                <input type="text" class="form-control" id="location">
            </div>
            <div class="mb-3">
                <label for="message-text" class="col-form-label">Color:</label>
                <select class="form-select" id="dropdown" aria-label="Default select example">
                    <option selected>Yellow</option>
                    <option value="2">Green</option>
                    <option value="3">Blue</option>
                    <option value="3">White</option>
                    <option value="3">Red</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Booking URL:</label>
                <input type="text" class="form-control" id="bookURL">
            </div>
            <div class="mb-3"></div>
                <label for="recipient-name" class="col-form-label">About:</label>
                <textarea class="form-control" id="message-text"></textarea>
            </div>
            <div class="mb-3">
                <div class="input-container">
                    <input type="text" id="textInput" placeholder="Tags">
                </div>
                <div class="output-container" id="outputContainer">
                </div>
            
                <script>
                    const textInput = document.getElementById('textInput');
                    const outputContainer = document.getElementById('outputContainer');
            
                    textInput.addEventListener('keydown', function(event) {
                        if (event.key === 'Enter' && textInput.value.trim() !== '') {
                            const outputItem = document.createElement('div');
                            outputItem.classList.add('output-item');
            
                            const savedText = document.createElement('span');
                            savedText.textContent = textInput.value;
            
                            const deleteBtn = document.createElement('button');
                            deleteBtn.classList.add('delete-btn');
                            deleteBtn.innerHTML = '&times;'; 
            
                            deleteBtn.addEventListener('click', function() {
                                outputContainer.removeChild(outputItem);
                            });
            
                            outputItem.appendChild(savedText);
                            outputItem.appendChild(deleteBtn);
            
                            outputContainer.appendChild(outputItem);
        
                            textInput.value = '';
                        }
                    });
                </script>
            </div>

          </form>
        </div>

        <div class="modal-footer">            
          <button type="button" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>

        
    </div>
</body>
</html>