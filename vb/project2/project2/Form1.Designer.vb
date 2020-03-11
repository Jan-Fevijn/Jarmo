<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class Form1
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
        Me.Label2 = New System.Windows.Forms.Label()
        Me.Label3 = New System.Windows.Forms.Label()
        Me.Label4 = New System.Windows.Forms.Label()
        Me.Label5 = New System.Windows.Forms.Label()
        Me.txtnaam = New System.Windows.Forms.TextBox()
        Me.txtDagen = New System.Windows.Forms.TextBox()
        Me.txtPersonen = New System.Windows.Forms.TextBox()
        Me.btnInsert = New System.Windows.Forms.Button()
        Me.btnSelect = New System.Windows.Forms.Button()
        Me.btnUpdate = New System.Windows.Forms.Button()
        Me.DataGridViewevenement = New System.Windows.Forms.DataGridView()
        CType(Me.DataGridViewevenement, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'Label2
        '
        Me.Label2.AutoSize = True
        Me.Label2.Location = New System.Drawing.Point(45, 9)
        Me.Label2.Name = "Label2"
        Me.Label2.Size = New System.Drawing.Size(113, 13)
        Me.Label2.TabIndex = 2
        Me.Label2.Text = "evenement aanmaken"
        '
        'Label3
        '
        Me.Label3.AutoSize = True
        Me.Label3.Location = New System.Drawing.Point(6, 34)
        Me.Label3.Name = "Label3"
        Me.Label3.Size = New System.Drawing.Size(33, 13)
        Me.Label3.TabIndex = 3
        Me.Label3.Text = "naam"
        '
        'Label4
        '
        Me.Label4.AutoSize = True
        Me.Label4.Location = New System.Drawing.Point(6, 58)
        Me.Label4.Name = "Label4"
        Me.Label4.Size = New System.Drawing.Size(69, 13)
        Me.Label4.TabIndex = 4
        Me.Label4.Text = "aantal dagen"
        '
        'Label5
        '
        Me.Label5.AutoSize = True
        Me.Label5.Location = New System.Drawing.Point(6, 85)
        Me.Label5.Name = "Label5"
        Me.Label5.Size = New System.Drawing.Size(83, 13)
        Me.Label5.TabIndex = 5
        Me.Label5.Text = "aantal personen"
        '
        'txtnaam
        '
        Me.txtnaam.Location = New System.Drawing.Point(154, 34)
        Me.txtnaam.Name = "txtnaam"
        Me.txtnaam.Size = New System.Drawing.Size(100, 20)
        Me.txtnaam.TabIndex = 6
        '
        'txtDagen
        '
        Me.txtDagen.Location = New System.Drawing.Point(154, 59)
        Me.txtDagen.Name = "txtDagen"
        Me.txtDagen.Size = New System.Drawing.Size(100, 20)
        Me.txtDagen.TabIndex = 7
        '
        'txtPersonen
        '
        Me.txtPersonen.Location = New System.Drawing.Point(154, 85)
        Me.txtPersonen.Name = "txtPersonen"
        Me.txtPersonen.Size = New System.Drawing.Size(100, 20)
        Me.txtPersonen.TabIndex = 8
        '
        'btnInsert
        '
        Me.btnInsert.Location = New System.Drawing.Point(9, 137)
        Me.btnInsert.Name = "btnInsert"
        Me.btnInsert.Size = New System.Drawing.Size(108, 24)
        Me.btnInsert.TabIndex = 9
        Me.btnInsert.Text = "insert into databank"
        Me.btnInsert.UseVisualStyleBackColor = True
        '
        'btnSelect
        '
        Me.btnSelect.Location = New System.Drawing.Point(9, 167)
        Me.btnSelect.Name = "btnSelect"
        Me.btnSelect.Size = New System.Drawing.Size(108, 23)
        Me.btnSelect.TabIndex = 10
        Me.btnSelect.Text = "select"
        Me.btnSelect.UseVisualStyleBackColor = True
        '
        'btnUpdate
        '
        Me.btnUpdate.Location = New System.Drawing.Point(123, 138)
        Me.btnUpdate.Name = "btnUpdate"
        Me.btnUpdate.Size = New System.Drawing.Size(104, 23)
        Me.btnUpdate.TabIndex = 11
        Me.btnUpdate.Text = "update databank"
        Me.btnUpdate.UseVisualStyleBackColor = True
        '
        'DataGridViewevenement
        '
        Me.DataGridViewevenement.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize
        Me.DataGridViewevenement.Location = New System.Drawing.Point(9, 279)
        Me.DataGridViewevenement.Name = "DataGridViewevenement"
        Me.DataGridViewevenement.Size = New System.Drawing.Size(550, 187)
        Me.DataGridViewevenement.TabIndex = 12
        '
        'Form1
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(571, 478)
        Me.Controls.Add(Me.DataGridViewevenement)
        Me.Controls.Add(Me.btnUpdate)
        Me.Controls.Add(Me.btnSelect)
        Me.Controls.Add(Me.btnInsert)
        Me.Controls.Add(Me.txtPersonen)
        Me.Controls.Add(Me.txtDagen)
        Me.Controls.Add(Me.txtnaam)
        Me.Controls.Add(Me.Label5)
        Me.Controls.Add(Me.Label4)
        Me.Controls.Add(Me.Label3)
        Me.Controls.Add(Me.Label2)
        Me.Name = "Form1"
        Me.Text = "Form1"
        CType(Me.DataGridViewevenement, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents Label2 As Label
    Friend WithEvents Label3 As Label
    Friend WithEvents Label4 As Label
    Friend WithEvents Label5 As Label
    Friend WithEvents txtnaam As TextBox
    Friend WithEvents txtDagen As TextBox
    Friend WithEvents txtPersonen As TextBox
    Friend WithEvents btnInsert As Button
    Friend WithEvents btnSelect As Button
    Friend WithEvents btnUpdate As Button
    Friend WithEvents DataGridViewevenement As DataGridView
End Class
