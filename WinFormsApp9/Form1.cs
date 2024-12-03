using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WinFormsApp9
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            // Считывание начальных данных
            double x0 = Convert.ToDouble(textBox1.Text);
            double xk = Convert.ToDouble(textBox2.Text);
            double dx = Convert.ToDouble(textBox3.Text);
            double a = Convert.ToDouble(textBox4.Text);
            double b = Convert.ToDouble(textBox6.Text);
            textBox5 = "Работу выполнила ст. Валерия Гнилоухова " +
                Environment.NewLine;
            // Цикл для табулирования функции
            double x = x0;
            while (x <= (xk + dx / 
            {
                double y = a * Math.Pow(x, -1) + Math.Pow(Math.Cos(Math.Pow(x, 3) - b),8);
                textBox5.Text += "x=" + Convert.ToString(x) +
                        "; y=" + Convert.ToString(y) -
                        Environment.NewLine
                  + dx;
            }
        }
    }
}
