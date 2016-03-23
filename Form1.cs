using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace testclient
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            insert.HelloWord ih = new insert.HelloWord();
            label1.Text = ih.HelloWorld(textBox1.Text, textBox2.Text).ToString();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            insert.HelloWord ih = new insert.HelloWord();
            label4.Text = ih.add((int)numericUpDown1.Value, (int)numericUpDown2.Value).ToString();
        }
    }
}
