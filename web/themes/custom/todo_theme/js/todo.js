(function ($) {
  $(document).ready(function () {
    // Ajouter une tâche
    $('#add-task').on('click', function () {
      const taskText = $('#new-task').val().trim();
      if (taskText !== '') {
        const taskHtml = `
          <div class="todo-item">
            <input type="checkbox" class="task-check">
            <span>${taskText}</span>
            <button class="remove-task">&times;</button>
          </div>
        `;
        $('#todo-list').append(taskHtml);
        $('#new-task').val('');
      }
    });

    // Marquer comme terminé
    $(document).on('change', '.task-check', function () {
      $(this).closest('.todo-item').toggleClass('done');
    });

    // Supprimer une tâche
    $(document).on('click', '.remove-task', function () {
      $(this).closest('.todo-item').fadeOut(300, function () {
        $(this).remove();
      });
    });

    // Appuyer sur Entrée
    $('#new-task').keypress(function (e) {
      if (e.which === 13) {
        $('#add-task').click();
      }
    });
  });
})(jQuery);
