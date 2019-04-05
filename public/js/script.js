console.log('👋');

/**
 * React?
 */
/*
class List extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            clickedItem: false,
            items: ['One', 'Two', 'Three']
        };
    }

    render() {
        if (this.state.clickedItem) {
            return 'You clicked ' + this.state.clickedItem;
        }

        var self = this;

        return this.state.items.map(function (item) {
            return React.createElement(
                'button',
                { onClick: () => self.setState({ clickedItem: item }) },
                'Item ' + item
            );
        });
    }
}

var domContainer = document.querySelector('#app');
ReactDOM.render(React.createElement(List), domContainer);
*/

/**
 * React & Babel?
 */
/*
class List extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            clickedItem: false,
            items: ['One', 'Two', 'Three']
        };
    }

    render() {
        if (this.state.clickedItem) {
            return `You clicked ${this.state.clickedItem}`;
        }

        return this.state.items.map((item, i) => {
            return (
                <button key={i} onClick={() => { this.setState({ clickedItem: item }) }}>
                    {`Item ${item}`}
                </button>
            );
        });
    }
}

var domContainer = document.querySelector('#app');
ReactDOM.render(<List />, domContainer);
*/

/**
 * Vue?
 */
/*
var list = Vue.component('list', {
    data: function () {
        return {
            clickedItem: false,
            items: ['One', 'Two', 'Three']
        }
    },
    methods: {
        handleItemClick: function (item) {
            this.clickedItem = item;
        }
    },
    // If not using babel, normally you would have this HTML elsewhere, but for easy transport let's place this here
    template: "\
    <div v-if=\"clickedItem\">You clicked {{ clickedItem }}</div> \
    <div v-else>\
        <button v-for=\"item in items\" v-on:click=\"handleItemClick(item)\">\
            Item {{ item }}\
        </button>\
    </div>"
});
new Vue({
    el: '#app',
    template: '<list></list>'
});
*/