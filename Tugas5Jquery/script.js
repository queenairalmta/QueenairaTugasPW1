$(document).ready(function(){
      $('#toggleBtn').click(function(){
        const input = $('#password');
        const type = input.attr('type') === 'password' ? 'text' : 'password';
        input.attr('type', type);
        
        // Ganti ikon biar interaktif
        $(this).text(type === 'password' ? '👁️' : '🫣');
      });
    });