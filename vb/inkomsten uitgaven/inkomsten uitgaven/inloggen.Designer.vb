<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class inloggen
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.txtgb = New System.Windows.Forms.TextBox()
        Me.Label1 = New System.Windows.Forms.Label()
        Me.Label2 = New System.Windows.Forms.Label()
        Me.Button1 = New System.Windows.Forms.Button()
        Me.txtww = New System.Windows.Forms.MaskedTextBox()
        Me.SuspendLayout()
        '
        'txtgb
        '
        Me.txtgb.Location = New System.Drawing.Point(15, 50)
        Me.txtgb.Name = "txtgb"
        Me.txtgb.Size = New System.Drawing.Size(241, 22)
        Me.txtgb.TabIndex = 0
        '
        'Label1
        '
        Me.Label1.AutoSize = True
        Me.Label1.Location = New System.Drawing.Point(12, 19)
        Me.Label1.Name = "Label1"
        Me.Label1.Size = New System.Drawing.Size(110, 17)
        Me.Label1.TabIndex = 2
        Me.Label1.Text = "gebruikersnaam"
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(15, 85)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(82, 17)
        Me.Label2.TabIndex = 3
        Me.Label2.Text = "wachtwoord"
        '
        'Button1
        '
        Me.Button1.Location = New System.Drawing.Point(15, 151)
        Me.Button1.Name = "Button1"
        Me.Button1.Size = New System.Drawing.Size(107, 31)
        Me.Button1.TabIndex = 5
        Me.Button1.Text = "inloggen"
        Me.Button1.UseVisualStyleBackColor = True
        '
        'txtww
        '
        Me.txtww.Location = New System.Drawing.Point(18, 123)
        Me.txtww.Name = "txtww"
        Me.txtww.PasswordChar = Global.Microsoft.VisualBasic.ChrW(42)
        Me.txtww.Size = New System.Drawing.Size(238, 22)
        Me.txtww.TabIndex = 6
        '
        'inloggen
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(8.0!, 16.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(282, 240)
        Me.Controls.Add(Me.txtww)
        Me.Controls.Add(Me.Button1)
        Me.Controls.Add(Me.Label2)
        Me.Controls.Add(Me.Label1)
        Me.Controls.Add(Me.txtgb)
        Me.Name = "inloggen"
        Me.Text = "Form1"
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents txtgb As TextBox
    Friend WithEvents Label1 As Label
    Friend WithEvents Label2 As Label
    Friend WithEvents Button1 As Button
    Friend WithEvents txtww As MaskedTextBox
End Class
