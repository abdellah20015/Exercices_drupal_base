(function ($, Drupal) {
  Drupal.behaviors.crudGsapBehavior = {
    attach: function (context, settings) {
      if ($(context).find('#crud-app').length) {
        const $list = $('#crud-list', context);
        const $input = $('#crud-input', context);
        const $addBtn = $('#crud-add', context);

        let items = JSON.parse(localStorage.getItem('crudItems') || '[]');

        renderItems();

        function renderItems() {
          $list.empty();

          if (items.length === 0) {
            const $emptyRow = $(`
              <tr>
                <td colspan="2" class="text-center">Aucun élément à afficher</td>
              </tr>
            `);
            $list.append($emptyRow);
          } else {
            items.forEach((item, index) => {
              const $tr = $(`
                <tr id="item-${index}">
                  <td class="item-text">${item}</td>
                  <td class="actions">
                    <button class="edit" data-index="${index}">Éditer</button>
                    <button class="remove" data-index="${index}">Supprimer</button>
                  </td>
                </tr>
              `);
              $list.append($tr);


              if (index === items.length - 1 && items.length > 1) {
                gsap.from($tr, {
                  opacity: 0,
                  y: 20,
                  duration: 0.5,
                  ease: "power2.out"
                });
              }
            });
          }
        }

        $addBtn.off('click').on('click', function() {
          const val = $input.val().trim();
          if (val) {
            items.push(val);
            localStorage.setItem('crudItems', JSON.stringify(items));
            renderItems();
            $input.val('');

            gsap.fromTo('#crud-table',
              { boxShadow: "0 0 0 rgba(46, 204, 64, 0)" },
              {
                boxShadow: "0 0 15px rgba(46, 204, 64, 0.5)",
                duration: 0.5,
                yoyo: true,
                repeat: 1
              }
            );
          }
        });

        $(document).off('click', '.remove').on('click', '.remove', function() {
          const index = $(this).data('index');
          const $tr = $(`#item-${index}`);


          gsap.to($tr, {
            opacity: 0,
            x: 20,
            duration: 0.3,
            onComplete: function() {
              items.splice(index, 1);
              localStorage.setItem('crudItems', JSON.stringify(items));
              renderItems();
            }
          });
        });

        $(document).off('click', '.edit').on('click', '.edit', function() {
          const index = $(this).data('index');
          const currentText = items[index];
          const newText = prompt("Modifier l'élément", currentText);

          console.log('Editing item at index:', index);

          if (newText !== null && newText.trim() !== '') {
            items[index] = newText.trim();
            localStorage.setItem('crudItems', JSON.stringify(items));

            const $tr = $(`#item-${index}`);
            gsap.fromTo($tr,
              { backgroundColor: "#FFFF99" },
              { backgroundColor: "transparent", duration: 1 }
            );

            renderItems();
          }
        });
      }
    }
  };
})(jQuery, Drupal);
