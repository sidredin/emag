/* Плагин - ввод текста*/

$(function(){
    CKEDITOR.replace( "constructor-option-elements-text", {
        on:
        {change: function() {
            var element = this.getData();
            $(".constructor-carpet-text").html(element);
            $(".constructor-carpet-text span").each(function(){
                if($(this).children().length == 0) {
                    var size = $(this).css("font-size"),
                        old_size = parseInt(size, 10),
                        new_size = old_size + 40 + "px";
                    $(this).css("font-size", new_size);
                    $(this).parents("p").css("font-size", new_size);
                }
            });
            $(".constructor-window").hide();
            $(".constructor-carpet-wrapper").show();
            $(".constructor-carpet-rotatable").draggable({
                cursor: "move",
                containment: "parent"
            });
        }
        }
    });

    $(".constructor-option-element-text-add").click(function(e){
        e.preventDefault();
        $("#cke_constructor-option-elements-text").toggle();
    });


    $(document).click(function(e){
        var editor = $("#cke_constructor-option-elements-text"),
            carpet = $(".constructor-carpet-wrapper"),
            dialog = $(".cke_editor_constructor-option-elements-text_dialog");
        if (!$(e.target).is( $(".constructor-option-element-text-add")) && $(e.target).closest(editor).length == 0 && $(e.target).closest(carpet).length == 0 && $(e.target).closest(dialog).length == 0) {
            $("#cke_constructor-option-elements-text").hide();
            e.stopPropagation();
        }
    });

    $(".constructor-carpet-rotatable").resizable().rotatable();

});