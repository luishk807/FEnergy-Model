package {
	
	import flash.display.Sprite;
	import flash.display.Loader;
	import flash.net.URLRequest;
	import flash.events.Event;
    import flash.display.StageAlign;
    import flash.display.StageScaleMode;
	
	public class Main extends Sprite{

		private var container:Sprite;
		
		public function Main(){
			
			container = new Sprite();	
			this.addChild(container);
			var url:URLRequest = new URLRequest("main.swf");
			var loader:Loader = new Loader();
			loader.load(url);
			loader.contentLoaderInfo.addEventListener(Event.COMPLETE, completeHandler);
			
			this.stage.scaleMode = StageScaleMode.NO_SCALE;
            this.stage.align = StageAlign.TOP_LEFT;
		}
		
		private function completeHandler(event:Event):void{			
			this.container.addChild(event.target.content);
			this.container.x = this.stage.stageWidth/2 - event.target.width /2;
			this.container.y = this.stage.stageHeight/2 - event.target.height /2;
			
			this.stage.addEventListener(Event.RESIZE, resizeHandler);
		}
		
		private function resizeHandler(event:Event):void{
			this.container.x = event.target.stage.stageWidth/2 - event.target.width /2;
			this.container.y = event.target.stage.stageHeight/2 - event.target.height /2;
		}
	}
}