$(document).ready(function () {
  let lSLength = localStorage.length
  let localValue
  let newId = 0

  function getValue () {
    if (lSLength > 0) {
      for (i = 0; i < lSLength; i++) {
        let key = localStorage.key(i)
        $('.task-list').append('<li class=\'item\' data-item=' + localStorage.key(i).slice(7) + '>' + localStorage[key] + '</li>')
      }
    }
  }

  getValue()

  $('.add-button').on('click', function () {
    let task = document.getElementById('task-input').value
    $('.item').each(function (index, el) {
      let maxId = $(this).attr('data-item')
      if (maxId > newId) {
        newId = maxId
      }
    })
    newId++
    localStorage.setItem('taskId_' + newId, task)
    localValue = localStorage.getItem('taskId_' + newId)
    $('.task-list').append('<li class=\'item\' data-item=\'' + newId + '\'><span class=\'item-value\'>' + localValue + '</span></li>')
    document.getElementById('task-input').value = ''
  })

  $('.task-list').on({
    mouseenter: function () {
      let listElem = $(this)
      listElem.append('<div class="hover-edit-menu"><a href="#" class="far fa-edit edit-button"></a> <a href="#" class="far fa-trash-alt remove-button"></a></div>')

      $('.hover-edit-menu').on('click', '.remove-button', function () {
        let elem = $(this).closest('.item', '.task-list')
        localStorage.removeItem('taskId_' + elem.attr('data-item'))
        elem.remove()
      })

      $('.hover-edit-menu').on('click', '.edit-button', function () {
        let currentTask = listElem
        let currentTaskValue = currentTask.text()
        let newTaskValue

        currentTask.html('<input type="text" class="form-control edit-input" value="' + currentTaskValue + '"> <a href="#" class="far fa-save save-button"></a> <a href="#" class="far fa-minus-square cancel-button"></a>')

        $('.save-button').on('click', function () {
          newTaskValue = $('.edit-input').val()
          localStorage.setItem('taskId_' + listElem.attr('data-item'), newTaskValue)
          currentTask.text(newTaskValue)
        })

        $('.cancel-button').on('click', function () {
          currentTask.text(currentTaskValue)
        })
      })

      if ($('.edit-input').is(':visible')) {
        $('.hover-edit-menu').hide()
      }
    },

    mouseleave: function () {
      $('.hover-edit-menu').remove()
    }
  }, '.item')

  $('.clear-button').click(function () {
    $('.item').remove()
    localStorage.clear()
    newId = 0
  })
})
