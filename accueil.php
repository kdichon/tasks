<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card" id="list1" style="border-radius: .75rem; background-color: #eff1f2;">
          <div class="card-body py-4 px-4 px-md-5">

            <p class="h1 text-center mt-3 mb-4 pb-3 text-primary">
              <i class="fas fa-check-square me-1"></i>
              <u>Gestionnaires de patients</u>
            </p>

            <div class="pb-2">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-row align-items-center">
                    <input type="text" action="edit.php?mod=add" method="POST" class="form-control form-control-lg" id="exampleFormControlInput1"
                      placeholder="Add new...">
                    <a href="#!" data-mdb-toggle="tooltip" title="Set due date"><i
                        class="fas fa-calendar-alt fa-lg me-3"></i></a>
                    <div>
                      <button type="button" class="btn btn-primary">Add</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <hr class="my-4">

            <div class="d-flex justify-content-end align-items-center mb-4 pt-2 pb-3">
              <p class="small mb-0 me-2 text-muted">Filter</p>
              <select class="select">
                <option value="1">All</option>
                <option value="2">Completed</option>
                <option value="3">Active</option>
                <option value="4">Has due date</option>
              </select>
              <p class="small mb-0 ms-4 me-2 text-muted">Sort</p>
              <select class="select">
                <option value="1">Added date</option>
                <option value="2">Due date</option>
              </select>
              <a href="#!" style="color: #23af89;" data-mdb-toggle="tooltip" title="Ascending"><i
                  class="fas fa-sort-amount-down-alt ms-2"></i></a>
            </div>
            <!-- Début de la boucle [WHILE] -->
            <?php
              // Lecture des donnéees dans la table [tasks]
              $result = $mysql->query("SELECT * FROM task LIMIT 10");
              // Affichage des taches dans la liste avec une boucle WHILE
              while($patient = $result->fetch_object()){
            ?>

            <ul class="list-group list-group-horizontal rounded-0 bg-transparent">
              <li
                class="list-group-item d-flex align-items-center ps-0 pe-3 py-1 rounded-0 border-0 bg-transparent">
                <div class="form-check">
                  <input class="form-check-input me-0" type="checkbox" value="" id="flexCheckChecked1"
                    aria-label="..." checked />
                </div>
              </li>
              <li
                class="list-group-item px-3 py-1 d-flex align-items-center flex-grow-1 border-0 bg-transparent">
                <p class="lead fw-normal mb-0">
                  <?php 
                    // Affiche la tache
                    echo $patient->task;
                  ?>
                </p>
              </li>
              <li class="list-group-item ps-3 pe-0 py-1 rounded-0 border-0 bg-transparent">
                <div class="d-flex flex-row justify-content-end mb-1">
                  <a href="#!" class="text-info" data-mdb-toggle="tooltip" title="Edit todo"><i
                      class="fas fa-pencil-alt me-3"></i></a>
                  <a href="#!" class="text-danger" data-mdb-toggle="tooltip" title="Delete todo"><i
                      class="fas fa-trash-alt"></i></a>
                </div>
                <div class="text-end text-muted">
                  <a href="#!" class="text-muted" data-mdb-toggle="tooltip" title="Created date">
                    <p class="small mb-0"><i class="fas fa-info-circle me-2"></i>28th Jun 2020</p>
                  </a>
                </div>
              </li>
            </ul>

            <!-- Fin de la boucle [WHILE] -->
            <?php
              }            
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>