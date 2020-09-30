<?php
/**
 * Adds kbot_Widget widget.
 */
class kbot_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'kbot_Widget', // Base ID
			esc_html__( 'Knowlege Bot', 'kbot_domain' ), // Name
			array( 'description' => esc_html__( 'Widget to ask questions about mofc', 'kbot_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 * 
	 * 
	 * 
	 * <div class="form-group"></div>
	*		
			   
	*			<div class="input-group mb-3">
			
	*				<input  class="form-control" id="questionText" aria-describedby="Your Question" placeholder="What is your question">
					
	*				<button type="button" id="submitQuestion" class="btn btn-success"> Enter </button> 
					
	*			</div>
			
	*	</div>
	 * 
	 * 
	 * 
	 * 
	 */
	public function widget( $args, $instance ) {
        echo $args['before_widget'];
        
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        //widget content output
		echo ' 
		
		<h4 class="text-black">Questions?</h4>
		<p class="text-muted">Ask me anything!</p>

		<div class="container" id = "mainContainer">
       
				<div id= "entryPoint">  </div> 

		        	<div class="form-group">
						<div class="input-group mb-3">
			
						<input  class="form-control" id="questionText" aria-describedby="Your Question" placeholder="What is your question">
                        <div class="input-group-append">
                        <span> <button type="button" id="submitQuestion" class="btn btn-success"> Ask </button> </span>
                        </div>
						
						</div>
					</div>
            
        </div>
		
		

		
		
		
		';
	   
        
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
     */
     
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Kbot', 'kbot_domain' );
		?>

		<p>
        <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
        <?php esc_attr_e( 'Title:', 'kbot_domain' ); ?>
        </label> 

        <input 
        class="widefat" 
        id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
        name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
        type="text" 
        value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget
